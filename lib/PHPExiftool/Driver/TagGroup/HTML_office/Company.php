<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_office;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Company extends AbstractTagGroup
{
    protected string $id = 'HTML-office:Company';

    protected string $name = 'Company';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Company',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::Office
             * line : 98542
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::Office.HTML-office:Company',
            'desc' => [
                'en' => 'Company',
            ],
        ],
    ];

    protected int $count = 0;
}
