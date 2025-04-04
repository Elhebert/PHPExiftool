<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalanceBracketing extends AbstractTagGroup
{
    protected string $id = 'Minolta:WhiteBalanceBracketing';

    protected string $name = 'WhiteBalanceBracketing';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance Bracketing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123332
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:WhiteBalanceBracketing',
            'desc' => [
                'en' => 'White Balance Bracketing',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125692
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:WhiteBalanceBracketing',
            'desc' => [
                'en' => 'White Balance Bracketing',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
