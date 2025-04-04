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
class FirstBroadcastFlag extends AbstractTagGroup
{
    protected string $id = 'MXF:FirstBroadcastFlag';

    protected string $name = 'FirstBroadcastFlag';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'First Broadcast Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114132
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FirstBroadcastFlag',
            'desc' => [
                'en' => 'First Broadcast Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
