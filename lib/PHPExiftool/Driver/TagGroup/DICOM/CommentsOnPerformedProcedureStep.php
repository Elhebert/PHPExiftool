<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CommentsOnPerformedProcedureStep extends AbstractTagGroup
{
    protected string $id = 'DICOM:CommentsOnPerformedProcedureStep';

    protected string $name = 'CommentsOnPerformedProcedureStep';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Comments On Performed Procedure Step',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72900
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:CommentsOnPerformedProcedureStep',
            'desc' => [
                'en' => 'Comments On Performed Procedure Step',
            ],
        ],
    ];

    protected int $count = 0;
}
