<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointActivationArea extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AFPointActivationArea';

    protected string $name = 'AFPointActivationArea';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point Activation Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53707
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:AFPointActivationArea',
            'desc' => [
                'en' => 'AF Point Activation Area',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56719
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:AFPointActivationArea',
            'desc' => [
                'en' => 'AF Point Activation Area',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
