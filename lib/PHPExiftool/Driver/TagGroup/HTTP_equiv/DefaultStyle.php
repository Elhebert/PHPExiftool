<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTTP_equiv;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DefaultStyle extends AbstractTagGroup
{
    protected string $id = 'HTTP-equiv:DefaultStyle';

    protected string $name = 'DefaultStyle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::equiv
             * line : 142869
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::equiv.HTTP-equiv:DefaultStyle',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
