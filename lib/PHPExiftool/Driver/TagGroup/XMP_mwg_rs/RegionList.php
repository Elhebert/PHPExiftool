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
class RegionList extends AbstractTagGroup
{
    protected string $id = 'XMP-mwg-rs:RegionList';

    protected string $name = 'RegionList';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MWG::Regions
             * line : 167135
             * type : struct
             * writable : true
             * count :
             * flags : bag,flattened,list
             */
            'id' => 'MWG::Regions.XMP-mwg-rs:RegionList',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
