<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class KhufuSigmaScalingFactors3MP extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:KhufuSigmaScalingFactors3MP';

    protected string $name = 'KhufuSigmaScalingFactors3MP';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Khufu Sigma Scaling Factors 3 MP',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108071
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:KhufuSigmaScalingFactors3MP',
            'desc' => [
                'en' => 'Khufu Sigma Scaling Factors 3 MP',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
