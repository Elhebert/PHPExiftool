<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_ncc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SetInfo extends AbstractTagGroup
{
    protected string $id = 'HTML-ncc:SetInfo';

    protected string $name = 'SetInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::ncc
             * line : 143021
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::ncc.HTML-ncc:SetInfo',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
