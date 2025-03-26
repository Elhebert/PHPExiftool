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
class ChannelHandle extends AbstractTagGroup
{
    protected string $id = 'MXF:ChannelHandle';

    protected string $name = 'ChannelHandle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Channel Handle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115271
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ChannelHandle',
            'desc' => [
                'en' => 'Channel Handle',
            ],
        ],
    ];

    protected int $count = 0;
}
