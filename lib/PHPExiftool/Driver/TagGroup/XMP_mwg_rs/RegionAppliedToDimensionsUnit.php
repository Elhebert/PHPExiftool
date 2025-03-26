<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mwg_rs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegionAppliedToDimensionsUnit extends AbstractTagGroup
{
    protected string $id = 'XMP-mwg-rs:RegionAppliedToDimensionsUnit';

    protected string $name = 'RegionAppliedToDimensionsUnit';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Region Applied To Dimensions Unit',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MWG::Regions
             * line : 113787
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'MWG::Regions.XMP-mwg-rs:RegionAppliedToDimensionsUnit',
            'desc' => [
                'en' => 'Region Applied To Dimensions Unit',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
