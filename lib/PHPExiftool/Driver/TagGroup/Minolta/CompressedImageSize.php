<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompressedImageSize extends AbstractTagGroup
{
    protected string $id = 'Minolta:CompressedImageSize';

    protected string $name = 'CompressedImageSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Compressed Image Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::Main
             * line : 124296
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:CompressedImageSize',
            'desc' => [
                'en' => 'Compressed Image Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
