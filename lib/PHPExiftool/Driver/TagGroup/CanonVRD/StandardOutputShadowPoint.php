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
class StandardOutputShadowPoint extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:StandardOutputShadowPoint';

    protected string $name = 'StandardOutputShadowPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Standard Output Shadow Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::Ver2
             * line : 60627
             * type : int16s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver2.CanonVRD:StandardOutputShadowPoint',
            'desc' => [
                'en' => 'Standard Output Shadow Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
