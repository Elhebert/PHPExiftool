<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetouchAreaMaskRangeAreaModelsComponents extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RetouchAreaMaskRangeAreaModelsComponents';

    protected string $name = 'RetouchAreaMaskRangeAreaModelsComponents';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Range Area Models Components',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287111
             * type : string
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskRangeAreaModelsComponents',
            'desc' => [
                'en' => 'Retouch Area Mask Range Area Models Components',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
