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
class Coverage extends AbstractTagGroup
{
    protected string $id = 'HTML-dc:Coverage';

    protected string $name = 'Coverage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::dc
             * line : 142708
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::dc.HTML-dc:Coverage',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
