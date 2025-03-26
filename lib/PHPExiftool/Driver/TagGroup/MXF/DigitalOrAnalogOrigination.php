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
class DigitalOrAnalogOrigination extends AbstractTagGroup
{
    protected string $id = 'MXF:DigitalOrAnalogOrigination';

    protected string $name = 'DigitalOrAnalogOrigination';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Digital Or Analog Origination',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114623
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DigitalOrAnalogOrigination',
            'desc' => [
                'en' => 'Digital Or Analog Origination',
            ],
        ],
    ];

    protected int $count = 0;
}
