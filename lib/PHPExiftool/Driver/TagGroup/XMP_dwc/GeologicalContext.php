<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GeologicalContext extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:GeologicalContext';

    protected string $name = 'GeologicalContext';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Geological Context',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78512
             * type : struct
             * writable : true
             * count :
             * flags :
             */
            'id' => 'DarwinCore::Main.XMP-dwc:GeologicalContext',
            'desc' => [
                'en' => 'Geological Context',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
