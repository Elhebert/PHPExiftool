<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DjVu_Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BookTitle extends AbstractTagGroup
{
    protected string $id = 'DjVu-Meta:BookTitle';

    protected string $name = 'BookTitle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DjVu::Meta
             * line : 107401
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DjVu::Meta.DjVu-Meta:BookTitle',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
