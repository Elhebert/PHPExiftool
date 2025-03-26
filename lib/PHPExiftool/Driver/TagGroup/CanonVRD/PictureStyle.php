<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureStyle extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:PictureStyle';

    protected string $name = 'PictureStyle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Style',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::DR4
             * line : 58664
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::DR4.CanonVRD:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        1 => [
            /**
             * table_name : CanonVRD::Ver2
             * line : 60555
             * type : int16s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver2.CanonVRD:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
