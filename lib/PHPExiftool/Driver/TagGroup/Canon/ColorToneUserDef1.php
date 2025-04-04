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
class ColorToneUserDef1 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorToneUserDef1';

    protected string $name = 'ColorToneUserDef1';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Tone User Def 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26607
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ColorToneUserDef1',
            'desc' => [
                'en' => 'Color Tone User Def 1',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51239
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:ColorToneUserDef1',
            'desc' => [
                'en' => 'Color Tone User Def 1',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51978
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:ColorToneUserDef1',
            'desc' => [
                'en' => 'Color Tone User Def 1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
