<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageSize extends AbstractTagGroup
{
    protected string $id = 'Sony:PreviewImageSize';

    protected string $name = 'PreviewImageSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 250302
             * type : int32u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:PreviewImageSize',
            'desc' => [
                'en' => 'Preview Image Size',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
