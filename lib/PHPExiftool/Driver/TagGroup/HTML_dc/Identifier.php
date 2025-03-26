<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_dc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Identifier extends AbstractTagGroup
{
    protected string $id = 'HTML-dc:Identifier';

    protected string $name = 'Identifier';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::dc
             * line : 142751
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::dc.HTML-dc:Identifier',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
