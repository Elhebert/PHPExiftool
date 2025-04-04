<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OpticalTestResult extends AbstractTagGroup
{
    protected string $id = 'MXF:OpticalTestResult';

    protected string $name = 'OpticalTestResult';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Optical Test Result',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114599
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:OpticalTestResult',
            'desc' => [
                'en' => 'Optical Test Result',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 114602
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:OpticalTestResult',
            'desc' => [
                'en' => 'Optical Test Result',
            ],
        ],
    ];

    protected int $count = 0;
}
