<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioChannels extends AbstractTagGroup
{
    protected string $id = 'Matroska:AudioChannels';

    protected string $name = 'AudioChannels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Channels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119255
             * type : unsigned
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:AudioChannels',
            'desc' => [
                'en' => 'Audio Channels',
            ],
        ],
    ];

    protected int $count = 0;
}
