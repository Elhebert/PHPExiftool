<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Generator extends AbstractTagGroup
{
    protected string $id = 'HTML:Generator';

    protected string $name = 'Generator';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Generator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::Main
             * line : 98484
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::Main.HTML:Generator',
            'desc' => [
                'en' => 'Generator',
            ],
        ],
    ];

    protected int $count = 0;
}
