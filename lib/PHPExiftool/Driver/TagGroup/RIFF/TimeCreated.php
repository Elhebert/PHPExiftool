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
class TimeCreated extends AbstractTagGroup
{
    protected string $id = 'RIFF:TimeCreated';

    protected string $name = 'TimeCreated';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Time Created',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Exif
             * line : 231412
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Exif.RIFF:TimeCreated',
            'desc' => [
                'en' => 'Time Created',
            ],
        ],
    ];

    protected int $count = 0;
}
