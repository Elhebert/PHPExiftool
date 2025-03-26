<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WordCount extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:WordCount';

    protected string $name = 'WordCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Word Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290380
             * type : integer
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::prism.XMP-prism:WordCount',
            'desc' => [
                'en' => 'Word Count',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
