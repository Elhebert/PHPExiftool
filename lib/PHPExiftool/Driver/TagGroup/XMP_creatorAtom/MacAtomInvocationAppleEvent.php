<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_creatorAtom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MacAtomInvocationAppleEvent extends AbstractTagGroup
{
    protected string $id = 'XMP-creatorAtom:MacAtomInvocationAppleEvent';

    protected string $name = 'MacAtomInvocationAppleEvent';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mac Atom Invocation Apple Event',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::creatorAtom
             * line : 284740
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::creatorAtom.XMP-creatorAtom:MacAtomInvocationAppleEvent',
            'desc' => [
                'en' => 'Mac Atom Invocation Apple Event',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
