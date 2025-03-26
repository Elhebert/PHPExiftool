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
class SaturationFaithful extends AbstractTagGroup
{
    protected string $id = 'Canon:SaturationFaithful';

    protected string $name = 'SaturationFaithful';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation Faithful',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26534
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:SaturationFaithful',
            'desc' => [
                'en' => 'Saturation Faithful',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51105
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:SaturationFaithful',
            'desc' => [
                'en' => 'Saturation Faithful',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51766
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:SaturationFaithful',
            'desc' => [
                'en' => 'Saturation Faithful',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
