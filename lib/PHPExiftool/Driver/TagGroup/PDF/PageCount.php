<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PageCount extends AbstractTagGroup
{
    protected string $id = 'PDF:PageCount';

    protected string $name = 'PageCount';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PDF::Pages
             * line : 264316
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PDF::Pages.PDF:PageCount',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
