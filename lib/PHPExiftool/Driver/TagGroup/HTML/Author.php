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
class Author extends AbstractTagGroup
{
    protected string $id = 'HTML:Author';

    protected string $name = 'Author';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Author',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::Main
             * line : 98454
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::Main.HTML:Author',
            'desc' => [
                'en' => 'Author',
            ],
        ],
    ];

    protected int $count = 0;
}
