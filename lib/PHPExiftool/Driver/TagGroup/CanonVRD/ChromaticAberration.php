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
class ChromaticAberration extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:ChromaticAberration';

    protected string $name = 'ChromaticAberration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Chromatic Aberration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::DR4
             * line : 58812
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::DR4.CanonVRD:ChromaticAberration',
            'desc' => [
                'en' => 'Chromatic Aberration',
            ],
        ],
        1 => [
            /**
             * table_name : CanonVRD::Ver2
             * line : 61196
             * type : int16s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver2.CanonVRD:ChromaticAberration',
            'desc' => [
                'en' => 'Chromatic Aberration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
