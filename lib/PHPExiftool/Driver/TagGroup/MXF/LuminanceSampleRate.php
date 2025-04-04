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
class LuminanceSampleRate extends AbstractTagGroup
{
    protected string $id = 'MXF:LuminanceSampleRate';

    protected string $name = 'LuminanceSampleRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Luminance Sample Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114392
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:LuminanceSampleRate',
            'desc' => [
                'en' => 'Luminance Sample Rate',
            ],
        ],
    ];

    protected int $count = 0;
}
