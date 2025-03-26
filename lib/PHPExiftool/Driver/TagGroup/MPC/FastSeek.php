<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FastSeek extends AbstractTagGroup
{
    protected string $id = 'MPC:FastSeek';

    protected string $name = 'FastSeek';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fast Seek',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MPC::Main
             * line : 112614
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPC::Main.MPC:FastSeek',
            'desc' => [
                'en' => 'Fast Seek',
            ],
        ],
    ];

    protected int $count = 0;
}
