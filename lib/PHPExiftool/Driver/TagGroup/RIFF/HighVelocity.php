<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HighVelocity extends AbstractTagGroup
{
    protected string $id = 'RIFF:HighVelocity';

    protected string $name = 'HighVelocity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'High Velocity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Instrument
             * line : 231733
             * type : int8s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Instrument.RIFF:HighVelocity',
            'desc' => [
                'en' => 'High Velocity',
            ],
        ],
    ];

    protected int $count = 0;
}
