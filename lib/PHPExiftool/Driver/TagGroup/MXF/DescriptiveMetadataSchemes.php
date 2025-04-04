<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DescriptiveMetadataSchemes extends AbstractTagGroup
{
    protected string $id = 'MXF:DescriptiveMetadataSchemes';

    protected string $name = 'DescriptiveMetadataSchemes';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Descriptive Metadata Schemes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117222
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:DescriptiveMetadataSchemes',
            'desc' => [
                'en' => 'Descriptive Metadata Schemes',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
