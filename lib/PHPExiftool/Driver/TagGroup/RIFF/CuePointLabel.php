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
class CuePointLabel extends AbstractTagGroup
{
    protected string $id = 'RIFF:CuePointLabel';

    protected string $name = 'CuePointLabel';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Cue Point Label',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Main
             * line : 231761
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Main.RIFF:CuePointLabel',
            'desc' => [
                'en' => 'Cue Point Label',
            ],
        ],
    ];

    protected int $count = 0;
}
