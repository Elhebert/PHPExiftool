<?php

namespace PHPExiftool\ClassUtils;

use PHPExiftool\Driver\AbstractTagGroup;

class tagGroupBuilder extends Builder
{
    private ?string $type = '';

    private ?string $php_type = '';

    private ?int $count = -1;

    private ?int $writable = -1;

    private array $tags = [];

    private array $descriptions = [];

    private array $flags = [];  // count of occurences for each flag

    public function addTag(array $tagComments, array $tagProperties)
    {
        // use special keys to render as php code :
        // "/**/" to render the entry as comments
        // "" (empty key) to render one level down
        $this->tags[] = ['/**/' => $tagComments, '' => $tagProperties];
    }

    /**
     * reconciliate "desc" attribute : for the same lng, keep the longuest one
     */
    public function setDescription(array $descriptions)
    {
        foreach ($descriptions as $lng => $description) {
            if (! array_key_exists($lng, $this->descriptions)) {
                $this->descriptions[$lng] = $description;
            } else {
                if ($description !== $this->descriptions[$lng]) {
                    $this->logger->alert(sprintf('Conflicting description for group "%s:%s" : [%s] "%s" != "%s"',
                        $this->namespace, $this->classname,
                        $lng, $description, $this->descriptions[$lng]
                    ));
                    if (strlen($description) > strlen($this->descriptions[$lng])) {
                        // arbitrary choice : keep the longest description
                        $this->descriptions[$lng] = $description;
                    }
                    $this->logger->alert(sprintf(' (keeping "%s")', $this->descriptions[$lng]));
                }
            }
        }
    }

    /**
     * reconciliate type -> php_type
     */
    public function setType(string $type, ?string $php_type)
    {
        if (! is_null($php_type)) {
            if ($this->php_type === '') {
                $this->php_type = $php_type;
            }
            if ($php_type != $this->php_type) {
                if ($this->php_type) {   // do no report same conflict
                    $this->logger->alert(sprintf('Conflicting php types for group "%s:%s" : "%s" (php:%s) != "%s" (php:%s)',
                        $this->namespace, $this->classname,
                        $type, $php_type, $this->type, $this->php_type
                    ));
                }
                $this->php_type = null;     // mixed
            }
        }
        if ($this->type === '') {
            $this->type = $type;
        } else {
            if ($type != $this->type) {
                $this->type = null;     // mixed
            }
        }
    }

    /**
     * reconciliate "writable" flag (optimistic : one writable tag sets the taggroup as writable)
     */
    public function setWritable(bool $writable)
    {
        if ($this->writable === -1) {
            $this->writable = $writable ? 1 : 0;
        }
        if (($writable ? 1 : 0) !== $this->writable) {
            $this->logger->alert(sprintf("Conflicting 'writable' attr for group \"%s:%s\"",
                $this->namespace, $this->classname
            ));
        }
        if ($writable) {
            $this->writable = 1;
        }
    }

    public function getFlags(): int
    {
        return array_key_exists('flags', $this->properties) ? $this->properties['flags'] : 0;
    }

    /**
     * reconciliate "count" attribute : keep value if same for all tags
     */
    public function setCount(int $count)
    {
        if ($this->count === -1) {
            $this->count = $count;
        }

        if ($count !== $this->count) {
            if (! is_null($this->count)) {
                $this->logger->alert(sprintf("Conflicting 'count' attr for group \"%s:%s\"",
                    $this->namespace, $this->classname
                ));
            }
            $this->count = null;
        }

    }

    /**
     * reconciliate flags : a flag must be set on all tags to be set on taggroup
     */
    public function setFlags(array $flags)
    {
        foreach ($flags as $flag) {    // "avoid", "binary", "permanent", ...
            if (! array_key_exists($flag, $this->flags)) {
                $this->flags[$flag] = 0;
            }
            $this->flags[$flag]++;
        }
    }

    public function isWritable(): bool
    {
        return $this->writable === 1;
    }

    public function getCount(): int
    {
        return is_null($this->count) ? 0 : max(0, $this->count);
    }

    public function getDescriptions()
    {
        return $this->descriptions;
    }

    public function computeProperties(): Builder
    {
        $this->properties['phpType'] = $this->php_type ?: 'mixed';
        $this->properties['isWritable'] = $this->isWritable();
        $this->properties['description'] = $this->descriptions;
        $this->properties['tags'] = $this->tags;
        if (! is_null($this->count)) {        // 0 = default parent value, don't write in child
            $this->properties['count'] = $this->getCount();
        }
        // flags
        $binFlags = 0;
        foreach ($this->flags as $flagName => $nOccurences) {
            if ($nOccurences === count($this->tags)) {
                $name = 'FLAG_'.strtoupper($flagName);
                $fqName = AbstractTagGroup::class.'::'.$name;
                if (defined($fqName)) {
                    $binFlags |= constant($fqName);
                }
            }
        }
        // also add "writable" as a flag
        if ($this->isWritable()) {
            $binFlags |= AbstractTagGroup::FLAG_WRITABLE;
        }
        if ($binFlags !== 0) {   // 0 is the default parent value
            $this->properties['flags'] = $binFlags;
        }

        return $this;
    }

    public function write(string $path): Builder
    {
        parent::write($path);

        return $this;
    }
}
