<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaskGroupBasedCorrMaskRangeAreaModelsComponents extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:MaskGroupBasedCorrMaskRangeAreaModelsComponents';

    protected string $name = 'MaskGroupBasedCorrMaskRangeAreaModelsComponents';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Mask Range Area Models Components',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283179
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened,list,seq
             */
            'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrMaskRangeAreaModelsComponents',
            'desc' => [
                'en' => 'Mask Group Based Corr Mask Range Area Models Components',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2625;
}
