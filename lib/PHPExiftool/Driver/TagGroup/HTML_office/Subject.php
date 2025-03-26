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
class Subject extends AbstractTagGroup
{
    protected string $id = 'HTML-office:Subject';

    protected string $name = 'Subject';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Subject',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::Office
             * line : 98578
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::Office.HTML-office:Subject',
            'desc' => [
                'en' => 'Subject',
            ],
        ],
    ];

    protected int $count = 0;
}
