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
class Language extends AbstractTagGroup
{
    protected string $id = 'HTML-dc:Language';

    protected string $name = 'Language';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::dc
             * line : 142756
             * type : ?
             * writable : false
             * count :
             * flags : bag,list
             */
            'id' => 'HTML::dc.HTML-dc:Language',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 320;
}
