<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TextLayerName extends AbstractTagGroup
{
    protected string $id = 'XMP-photoshop:TextLayerName';

    protected string $name = 'TextLayerName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Text Layer Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::photoshop
             * line : 289815
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::photoshop.XMP-photoshop:TextLayerName',
            'desc' => [
                'en' => 'Text Layer Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
