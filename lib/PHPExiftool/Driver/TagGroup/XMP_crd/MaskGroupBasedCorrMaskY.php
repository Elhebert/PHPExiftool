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
class MaskGroupBasedCorrMaskY extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:MaskGroupBasedCorrMaskY';

    protected string $name = 'MaskGroupBasedCorrMaskY';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Mask Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283437
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrMaskY',
            'desc' => [
                'en' => 'Mask Group Based Corr Mask Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
