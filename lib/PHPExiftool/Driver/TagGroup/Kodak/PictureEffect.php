<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureEffect extends AbstractTagGroup
{
    protected string $id = 'Kodak:PictureEffect';

    protected string $name = 'PictureEffect';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Picture Effect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Type11
             * line : 109541
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type11.Kodak:PictureEffect',
            'desc' => [
                'en' => 'Picture Effect',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
