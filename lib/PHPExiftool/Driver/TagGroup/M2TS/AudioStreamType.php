<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\M2TS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioStreamType extends AbstractTagGroup
{
    protected string $id = 'M2TS:AudioStreamType';

    protected string $name = 'AudioStreamType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : M2TS::Main
             * line : 162502
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'M2TS::Main.M2TS:AudioStreamType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
