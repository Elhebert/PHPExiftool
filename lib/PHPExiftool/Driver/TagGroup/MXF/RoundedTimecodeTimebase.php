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
class RoundedTimecodeTimebase extends AbstractTagGroup
{
    protected string $id = 'MXF:RoundedTimecodeTimebase';

    protected string $name = 'RoundedTimecodeTimebase';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rounded Timecode Timebase',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115544
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:RoundedTimecodeTimebase',
            'desc' => [
                'en' => 'Rounded Timecode Timebase',
            ],
        ],
    ];

    protected int $count = 0;
}
