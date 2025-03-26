<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DistortionCorrectionSetting extends AbstractTagGroup
{
    protected string $id = 'Canon:DistortionCorrectionSetting';

    protected string $name = 'DistortionCorrectionSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Distortion Correction Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::VignettingCorr2
             * line : 53134
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::VignettingCorr2.Canon:DistortionCorrectionSetting',
            'desc' => [
                'en' => 'Distortion Correction Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
