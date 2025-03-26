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
class TargetAperture extends AbstractTagGroup
{
    protected string $id = 'Canon:TargetAperture';

    protected string $name = 'TargetAperture';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Target Aperture',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52648
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:TargetAperture',
            'desc' => [
                'en' => 'Target Aperture',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
