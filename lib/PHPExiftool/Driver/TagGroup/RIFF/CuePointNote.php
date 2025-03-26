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
class CuePointNote extends AbstractTagGroup
{
    protected string $id = 'RIFF:CuePointNote';

    protected string $name = 'CuePointNote';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Main
             * line : 328675
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Main.RIFF:CuePointNote',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
