<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashAttributes extends AbstractTagGroup
{
    protected string $id = 'Flash:FlashAttributes';

    protected string $name = 'FlashAttributes';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Flash Attributes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Flash::Main
             * line : 86669
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Flash::Main.Flash:FlashAttributes',
            'desc' => [
                'en' => 'Flash Attributes',
            ],
        ],
    ];

    protected int $count = 0;
}
