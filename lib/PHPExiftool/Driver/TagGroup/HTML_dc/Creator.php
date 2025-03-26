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
class Creator extends AbstractTagGroup
{
    protected string $id = 'HTML-dc:Creator';

    protected string $name = 'Creator';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::dc
             * line : 142714
             * type : ?
             * writable : false
             * count :
             * flags : list,seq
             */
            'id' => 'HTML::dc.HTML-dc:Creator',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 576;
}
