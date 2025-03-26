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
class Contributor extends AbstractTagGroup
{
    protected string $id = 'HTML-dc:Contributor';

    protected string $name = 'Contributor';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Contributor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::dc
             * line : 98597
             * type : ?
             * writable : false
             * count :
             * flags : bag,list
             */
            'id' => 'HTML::dc.HTML-dc:Contributor',
            'desc' => [
                'en' => 'Contributor',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 320;
}
