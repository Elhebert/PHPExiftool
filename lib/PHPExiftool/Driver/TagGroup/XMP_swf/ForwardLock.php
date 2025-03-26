<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_swf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ForwardLock extends AbstractTagGroup
{
    protected string $id = 'XMP-swf:ForwardLock';

    protected string $name = 'ForwardLock';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Forward Lock',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::swf
             * line : 290517
             * type : boolean
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::swf.XMP-swf:ForwardLock',
            'desc' => [
                'en' => 'Forward Lock',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
