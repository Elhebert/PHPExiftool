<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AttachedFileReferral extends AbstractTagGroup
{
    protected string $id = 'Matroska:AttachedFileReferral';

    protected string $name = 'AttachedFileReferral';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Attached File Referral',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119473
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'Matroska::Main.Matroska:AttachedFileReferral',
            'desc' => [
                'en' => 'Attached File Referral',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
