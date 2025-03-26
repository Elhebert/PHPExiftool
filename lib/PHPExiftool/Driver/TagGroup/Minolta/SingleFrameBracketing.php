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
class SingleFrameBracketing extends AbstractTagGroup
{
    protected string $id = 'Minolta:SingleFrameBracketing';

    protected string $name = 'SingleFrameBracketing';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Single Frame Bracketing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123321
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:SingleFrameBracketing',
            'desc' => [
                'en' => 'Single Frame Bracketing',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
