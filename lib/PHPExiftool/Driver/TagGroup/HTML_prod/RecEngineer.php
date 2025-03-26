<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_prod;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecEngineer extends AbstractTagGroup
{
    protected string $id = 'HTML-prod:RecEngineer';

    protected string $name = 'RecEngineer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rec Engineer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::prod
             * line : 98798
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::prod.HTML-prod:RecEngineer',
            'desc' => [
                'en' => 'Rec Engineer',
            ],
        ],
    ];

    protected int $count = 0;
}
