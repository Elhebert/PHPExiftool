<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_Device;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PlanePoseRotationY extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:PlanePoseRotationY';

    protected string $name = 'PlanePoseRotationY';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Plane Pose Rotation Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 280970
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::Device.XMP-Device:PlanePoseRotationY',
            'desc' => [
                'en' => 'Plane Pose Rotation Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
